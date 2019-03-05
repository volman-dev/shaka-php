<?php

/**
 * Copyright 2019 Amin Yazdanpanah<http://www.aminyazdanpanah.com>.
 *
 * Licensed under the MIT License;
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://opensource.org/licenses/MIT
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Shaka\Options\Streams;


class Stream extends BuildStream
{
    /** @var string */
    private $input;

    /** @var string */
    private $stream_selector;

    /** @var string */
    private $output;

    /** @var string */
    private $init_segment;

    /** @var string */
    private $segment_template;

    /** @var string */
    private $bandwidth;

    /** @var string */
    private $language;

    /** @var string */
    private $output_format;

    /** @var string */
    private $trick_play_factor;

    /**
     * @return string
     */
    protected function getInput()
    {
        if (!$this->input) {
            return null;
        }

        return StreamOptions::INPUT . '=' . $this->input;
    }

    /**
     * @param string $input
     * @return $this
     */
    public function setInput(string $input)
    {
        $this->input = $input;
        return $this;
    }

    /**
     * @return string
     */
    protected function getStreamSelector()
    {
        if (!$this->stream_selector) {
            return null;
        }

        return StreamOptions::STREAM_SELECTOR . '=' . $this->stream_selector;
    }

    /**
     * @param string $stream_selector
     * @return $this
     */
    public function setStreamSelector(string $stream_selector)
    {
        $this->stream_selector = $stream_selector;
        return $this;
    }

    /**
     * @return string
     */
    protected function getOutput()
    {
        if (!$this->output) {
            return null;
        }

        return StreamOptions::OUTPUT . '=' . $this->output;
    }

    /**
     * @param string $output
     * @return $this
     */
    public function setOutput(string $output)
    {
        $this->output = $output;
        return $this;
    }

    /**
     * @return string
     */
    protected function getInitSegment()
    {
        if (!$this->init_segment) {
            return null;
        }

        return StreamOptions::INIT_SEGMENT . '=' . $this->init_segment;
    }

    /**
     * @param string $init_segment
     * @return $this
     */
    public function setInitSegment(string $init_segment)
    {
        $this->init_segment = $init_segment;
        return $this;
    }

    /**
     * @return string
     */
    protected function getSegmentTemplate()
    {
        if (!$this->segment_template) {
            return null;
        }

        return StreamOptions::SEGMENT_TEMPLATE . '=' . $this->segment_template;
    }

    /**
     * @param string $segment_template
     * @return $this
     */
    public function setSegmentTemplate(string $segment_template)
    {
        $this->segment_template = $segment_template;
        return $this;
    }

    /**
     * @return string
     */
    protected function getBandwidth()
    {
        if (!$this->bandwidth) {
            return null;
        }

        return StreamOptions::BANDWIDTH . '=' . $this->bandwidth;
    }

    /**
     * @param string $bandwidth
     * @return $this
     */
    public function setBandwidth(string $bandwidth)
    {
        $this->bandwidth = $bandwidth;
        return $this;
    }

    /**
     * @return string
     */
    protected function getLanguage()
    {
        if (!$this->language) {
            return null;
        }

        return StreamOptions::LANGUAGE . '=' . $this->language;
    }

    /**
     * @param string $language
     * @return $this
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    protected function getOutputFormat()
    {
        if (!$this->output_format) {
            return null;
        }

        return StreamOptions::OUTPUT_FORMAT . '=' . $this->output_format;
    }

    /**
     * @param string $output_format
     * @return $this
     */
    public function setOutputFormat(string $output_format)
    {
        $this->output_format = $output_format;
        return $this;
    }

    /**
     * @return string
     */
    protected function getTrickPlayFactor()
    {
        if (!$this->trick_play_factor) {
            return null;
        }

        return StreamOptions::TRICK_PLAY_FACTOR . '=' . $this->trick_play_factor;
    }

    /**
     * @param string $trick_play_factor
     * @return $this
     */
    public function setTrickPlayFactor(string $trick_play_factor)
    {
        $this->trick_play_factor = $trick_play_factor;
        return $this;
    }
}