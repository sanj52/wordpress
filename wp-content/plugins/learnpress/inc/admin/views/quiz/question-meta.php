<?php
/**
 * Question options template.
 *
 * @since 3.0.0
 */
?>

<script type="text/x-template" id="tmpl-lp-quiz-question-meta">
    <div class="quiz-question-options">
        <div class="postbox" @click="openSettings($event)">
            <h2 class="hndle"><span><?php _e( 'Settings', 'learnpress' ); ?></span>
            </h2>
            <a class="toggle" @click.prevent="openSettings($event)"></a>
            <div class="inside">
                <div class="rwmb-meta-box">
                    <div class="rwmb-field rwmb-textarea-wrapper">
                        <div class="rwmb-label">
                            <label for=""><?php _e( 'Question Content', 'learnpress' ); ?></label>
                        </div>
                        <div class="rwml-input">
                            <div>
                                   <textarea name="" id="" cols="60" rows="3" class="rwmb-textarea large-text"
                                             @change="updateContent"
                                             v-model="question.settings.content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="rwmb-field rwmb-number-wrapper">
                        <div class="rwmb-label">
                            <label for=""><?php _e( 'Mark for this question', 'learnpress' ); ?></label>
                        </div>
                        <div class="rwml-input">
                            <div>
                                <input name="mark" type="number" min="1" v-model="question.settings.mark"
                                       @change="updateMeta">
                                <p class="description"><?php _e( 'Mark for choosing the right answer.', 'learnpress' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="rwmb-field rwmb-textarea-wrapper">
                        <div class="rwmb-label">
                            <label for=""><?php _e( 'Question Explanation', 'learnpress' ); ?></label>
                        </div>
                        <div class="rwml-input">
                            <div>
                                   <textarea name="explanation" id="" cols="60" rows="3"
                                             class="rwmb-textarea large-text"
                                             @change="updateMeta"
                                             v-model="question.settings.explanation"></textarea>
                                <p class="description"><?php _e( 'Explain why an option is true and other is false. The text will be shown when user click on \'Check answer\' button.', 'learnpress' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="rwmb-field rwmb-textarea-wrapper">
                        <div class="rwmb-label">
                            <label for=""><?php _e( 'Question Hint', 'learnpress' ); ?></label>
                        </div>
                        <div class="rwml-input">
                            <div>
                                   <textarea name="hint" id="" cols="60" rows="3" class="rwmb-textarea large-text"
                                             @change="updateMeta"
                                             v-model="question.settings.hint"></textarea>
                                <p class="description"><?php _e( 'Instruction for user to select the right answer. The text will be shown when users click the \'Hint\' button.', 'learnpress' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    (function (Vue, $store) {

        Vue.component('lp-quiz-question-meta', {
            template: '#tmpl-lp-quiz-question-meta',
            props: ['question'],
            methods: {
                // update question content
                updateContent: function () {
                    $store.dispatch('lqs/updateQuestionContent', this.question);
                },
                // update question meta
                updateMeta: function (e) {
                    $store.dispatch('lqs/updateQuestionMeta', {
                        question: this.question,
                        meta_key: e.target.name
                    });
                },
                openSettings: function (e) {
                    e.stopPropagation();
                    var $root = $(this.$el).closest('.question-settings'),
                        $postbox = $root.find('.postbox');
                    $postbox.removeClass('closed');
                    if (!$(e.target).hasClass('toggle')) {
                        return;
                    }

                    var isClosed = $root.toggleClass('closed').hasClass('closed');

                    $store.dispatch('lqs/updateQuizQuestionsHidden', {
                        hidden: $('.question-settings.closed').map(function () {
                            return $(this).closest('.question-item').data('item-id')
                        }).get()
                    })
                }
            }
        })

    })(Vue, LP_Quiz_Store);
</script>
